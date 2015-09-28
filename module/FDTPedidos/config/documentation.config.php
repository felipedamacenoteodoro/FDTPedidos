<?php
return array(
    'FDTPedidos\\V1\\Rest\\Ptypes\\Controller' => array(
        'description' => 'Handles payment types',
        'collection' => array(
            'description' => 'Payment Collection',
            'GET' => array(
                'description' => 'Lista todos os meios de pagamentos',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes"
       },
       "first": {
           "href": "/ptypes?page={page}"
       },
       "prev": {
           "href": "/ptypes?page={page}"
       },
       "next": {
           "href": "/ptypes?page={page}"
       },
       "last": {
           "href": "/ptypes?page={page}"
       }
   }
   "_embedded": {
       "ptypes": [
           {
               "_links": {
                   "self": {
                       "href": "/ptypes[/:ptypes_id]"
                   }
               }
              "name": ""
           }
       ]
   }
}',
            ),
            'POST' => array(
                'description' => 'Cria nova forma de pagamento.',
                'request' => '{
   "name": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes[/:ptypes_id]"
       }
   }
   "name": ""
}',
            ),
        ),
        'entity' => array(
            'description' => 'Payment Entitys',
            'GET' => array(
                'description' => 'Retorna uma forma de pagamento',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes[/:ptypes_id]"
       }
   }
   "name": ""
}',
            ),
            'PATCH' => array(
                'description' => 'Atualiza apenas um campo da forma de pagamento',
                'request' => '{
   "name": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes[/:ptypes_id]"
       }
   }
   "name": ""
}',
            ),
        ),
    ),
);
