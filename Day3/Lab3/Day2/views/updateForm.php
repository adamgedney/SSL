


<body>

<?php foreach($data as $par){ ?>
<form action="?action=updatepr" method="post">
product id:
<input type="text" name="pid" readonly="readonly" value='<?=$par["product_id"]?>'/>

Product Name:
<input type="text" name="pid" readonly="readonly" value='<?=$par["product_name"]?>'/>

Product desc:
<input type="text" name="pid" readonly="readonly" value='<?=$par["product_desc"]?>'/>

<input type="submit" value="submit"/>
</form>

<?php } ?>


</body>