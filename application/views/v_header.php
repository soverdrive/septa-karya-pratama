<?php if (isset($array_navigation)) { ?>
    <div class="container-fluid separate">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10">            
                <ul class="nav nav-tabs">
                    <?php foreach ($array_navigation as $name => $value) { ?>
                        <li id="<?php echo str_replace(' ', '', $name); ?>"><a href="<?php echo $value; ?>"><?php echo strtoupper($name); ?></a></li> 
                        <?php } ?>
                </ul> 
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
    <?php if (isset($active)) { ?>
                $("#<?php echo str_replace(' ', '', $active); ?>").addClass("active");
    <?php } ?>
        });
    </script>
<?php } ?>
