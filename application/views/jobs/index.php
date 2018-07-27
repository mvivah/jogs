<div class="container">
    <h3><?= $title?></h3>
    <?php if($jobs<1):?>
        <div class="row">
            <div class="col-md-6">
            There are no graded jobs
            </div>
        </div>
    <?php else:?>
    <table class="table table-sm table-stripped">
        <tr>
            <th>Title</th>
            <th>Know How</th>
            <th>Problem Solving</th>
            <th>Problem Solving</th>
            <th>Intersect</th>
        </tr>
        <?php foreach($jobs as $job):?>
        <tbody>
            <tr>
                <td><?php echo $job['jobTitle'];?></td>
                <td><?php echo $job['knowHow'];?></td>
                <td><?php echo $job['problemSolving'];?></td>
                <td><?php echo $job['accountability'];?></td>
                <td><?php echo $job['intersect'];?></td>
            </tr>
        </tbody>
        <?php endforeach;?>
    </table>
<?php endif;?>
</div>
