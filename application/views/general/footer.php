                <?php
$this->config->load('usr/common');
$asset_path=base_url($this->config->item('asset')).'/';
?>
                
                </div>
</div>
            <hr>
            <footer>
                <p>&copy;IT-SPECTRUM 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="<?php echo $asset_path;?>vendors/jquery-1.9.1.min.js"></script>
        <script src="<?php echo $asset_path;?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $asset_path;?>vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo $asset_path;?>assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>

