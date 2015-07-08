<?php
$schema = new \Doctrine\DBAL\Schema\Schema();
$Page = $schema->createTable("paginas");
$Page->addColumn("id", "integer", array("unsigned" => true, "autoincrement" => true));
$Page->setPrimaryKey(array('0'=>'id'));
$Page->addColumn("title", "string", array("length" => 255, 'notnull' => true));
$Page->addColumn("orden", "integer", array("length" => 5, 'notnull' => false));
$Page->addColumn("nombre", "string", array("length" => 30, 'notnull' => true));
$Page->addColumn("email", "string", array("length" => 50, 'notnull' => true));
$Page->addUniqueIndex(array('0'=>'email'));
$Page->addColumn("created", "datetime", array('notnull' => true));
$Page->addColumn("updated", "datetime", array('notnull' => true));
$Page->addColumn("slug", "string", array("length" => 255, 'notnull' => true));

return $schema;