<?php
require __DIR__ . '/../vendor/autoload.php';
use Affinity\Affinity;
use Affinity\AffinityError;
function check($value,$message){if(!$value)throw new Exception($message);}
$base='http://127.0.0.1:5199/php-practice-retry';
file_get_contents($base.'/reset');
$api=new Affinity('test',['baseUrl'=>$base,'maxRetries'=>1]);
$patient=$api->patients->create(['name'=>['first'=>'Alex','last'=>'Example'],'dateOfBirth'=>'1990-01-01']);
check($patient->id==='pat_a','patient');
$api->patients->update($patient->id,['email'=>null]);
$api->patients->delete($patient->id);
check(array_map(fn($p)=>$p->id,iterator_to_array($api->patients->iterate(['limit'=>1,'query'=>'Alex'])))===['pat_a','pat_b'],'pagination');
try{$api->patients->get('pat_a',['practiceId'=>'prac_b']);throw new Exception('mismatch accepted');}catch(InvalidArgumentException $e){}
try{$api->orders->submit('ord_a');throw new Exception('missing key accepted');}catch(InvalidArgumentException $e){}
$api->orders->sign('ord_a',['prescriber'=>['id'=>'prov_a'],'expectedRevision'=>'rev_reviewed','signatureAttestation'=>true],['idempotencyKey'=>'sign_job']);
$api->orders->submit('ord_a',['idempotencyKey'=>'submit_job']);
try{$api->patients->get('pat_error');throw new Exception('missing error');}catch(AffinityError $e){check($e->status===429&&$e->errorCode==='rate_limited'&&$e->requestId==='req_a'&&$e->retryAfter==0&&$e->retryable,'errors');check(!str_contains($e->getMessage(),'private'),'private error');}
$trace=json_decode(file_get_contents($base.'/trace'),true);
check(count(array_filter($trace,fn($r)=>$r['path']==='/v1/auth/access'))===1,'identity cache');
$writes=array_values(array_filter($trace,fn($r)=>$r['method']==='PATCH'));
check(count($writes)===2&&$writes[0]['key']===$writes[1]['key']&&$writes[0]['body']===['email'=>null],'retry keys');
echo "PHP approved interface passed\n";
