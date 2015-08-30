<div id="content">
    <div class="row">
        <div class="col-md-12">
            <table class="table col-md-10">
                <tr>
                    <td>url</td>
                    <td>title</td>
                    <td>keywords</td>
                    <td>description</td>
                    <td>canonical</td>
                    <td>prev</td>
                    <td>next</td>
                    <td>author</td>
                </tr>
                <?php //var_dump($results); ?>
                <?php foreach ($results as $res ): ?>
                <tr>
                    <td><a href="<?php echo $res['url']; ?>" target="_blank"><?php echo $res['url']; ?></a></td>
                    <td><?php echo $res['title']['obtain']; ?></td>
                    <td><?php echo $res['keywords']['obtain']; ?></td>
                    <td><?php echo $res['description']['obtain']; ?></td>
                    <td><?php echo $res['canonical']['obtain']; ?></td>
                    <td><?php echo $res['prev']['obtain']; ?></td>
                    <td><?php echo $res['next']['obtain']; ?></td>
                    <td><?php echo $res['author']['obtain']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>