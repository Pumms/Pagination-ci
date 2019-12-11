<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Pagination</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="<?= base_url('peoples/index?keyword=&submit=back'); ?>" class="text-decoration-none">
                <span class="navbar-brand">
                    Belajar Pagination
                </span>
            </a>

            <form class="form-inline my-2 my-lg-0" method="get">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" name="keyword" autocomplete="off" autofocus>
                <input class="btn btn-outline-light my-2 my-sm-0" type="submit" name="submit" value="Search">
            </form>
        </div>
    </nav>
    <div class="container">
        <h5>Result : <?= $total_rows; ?></h5>
        <table class="table table-bordered table-hover mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($peoples)) : ?>
                    <tr>
                        <td colspan="4">
                            <div class="alert alert-danger">
                                Data not Found!
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
                <?php foreach ($peoples as $p) : ?>
                    <tr>
                        <th scope="row"><?= ++$start; ?></th>
                        <td><?= $p['name'] ?></td>
                        <td><?= $p['address'] ?></td>
                        <td><?= $p['email'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?= $this->pagination->create_links(); ?>
    </div>


</body>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>