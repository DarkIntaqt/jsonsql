### JSON SQL

## A function which allows to perform sql queries on json strings or arrays.

<img src="https://repository-images.githubusercontent.com/345436203/30d25080-83de-11eb-9ee4-7d6812b59d9a">

The function works as follows:

```php
jsonsql('SELECT id FROM json','{"id":"0","name":"Tom"},{"id":"1","name":"Tim"}');

// => Returns [0,1]


jsonsql('SELECT name FROM json',array(array("id"=>0,"name"=>"Tom"),array("id"=>1,"name"=>"Tim")));

// => Returns ["Tom","Tim"]
```

You can use JSON Strings or arrays. The function will decrypts it automatically.
