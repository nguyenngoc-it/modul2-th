
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>


<div class="container">
    <a href="index.php?page=create-product">ADD PRODUCT</a>
    <table class="table" >
        <thead>
        <tr>
            <th scope="col">Mã Hàng</th>
            <th scope="col">Tên Hàng</th>
            <th scope="col">Loại Hàng</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($products)) {
            foreach ($products as $product) :?>
                <tr>
                    <th scope="row"><?php echo $product->getMahang() ?></th>
                    <td><?php echo $product->getTenhang() ?></td>
                    <td><?php echo $product->getIdLoaihang() ?></td>
                    <td><a href="home.php?page=update-product&id=<?php echo $product->getMahang()?>" class="btn btn-warning btn-lg">Edit</a></td>
                    <td><a href="home.php?page=delete-product&id=<?php echo $product->getMahang()?>" class="btn btn-danger btn-lg">Delete</a></td>
                </tr>
            <?php endforeach;
        } ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script>

        </script>
        </tbody>
    </table>
</div>



</body>
</html>