# JSON-Response-CI
This library for returning json response to client in codeigniter

Place the file in library folder in application\libraries folder of codeigniter project

now include library in the autoloader or manually as

$this->load->liberary('Jres');

and send JSON response in controller using

$this->jres->success(array $data, string $msg);

that will give output as

{"status":"success", "message":"message", "data": [ ... .... ] }


or

$this->jres->failure( string $msg, array $data);

that will give output as

{"status":"failure", "message":"message", "data": [ ... .... ] }



Benifits
it is easy to use liberary that can give JSEND structure response with  "content-type : Application/Json"
