<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class User1Service{
 use ConsumesExternalService;
 /**
 * The base uri to consume the User1 Service
 * @var string
 */
 public $baseUri;
 public function __construct()
 {
 $this->baseUri = config('services.users1.base_uri');
}

 /**
 * Obtain the full list of Users from User1 Site
 * @return string
 */
 
 public function obtainUsers1()
 {
 return $this->performRequest('GET','/users'); 


 }
 /**
 * Create one user using the User1 service
 * @return string
 */
public function createUser1($data)
{
return $this->performRequest('POST', '/users', 

$data);
}
public function obtainUser1($id)
 {
 return $this->performRequest('GET', "/users/{$id}");

 }
 public function editUser1($data, $id)
 {
 return $this->performRequest('PUT', "/users/{$id}", $data);

 }
 public function editUser11($data, $id)
 {
 return $this->performRequest('PATCH', "/users/{$id}", $data);

 }
 
 public function deleteUser1($id)
 {
 return $this->performRequest('DELETE', "/users/{$id}");

 }
}