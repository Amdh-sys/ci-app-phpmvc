<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
        <h3> List of Peoples</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;	foreach($peoples as $people):	?>
                    <tr>
                        <th><?= $i++; ?></th>
                        <td><?= $people['name']; ?></td>
                        <td><?= $people['email']; ?></td>
                            <td>
                                <a href="" class="badge badge-success">detail</a>
                                <a href="" class="badge badge-primary">ubah</a>
                                <a href="" class="badge badge-danger">hapus</a>
                            </td>
                    </tr>
                <?php	endforeach;	?>
            </tbody>
        </table>
        </div>
    </div>
</div>