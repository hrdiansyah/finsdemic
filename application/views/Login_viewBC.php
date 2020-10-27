<div class="hero-wrap" style="background-image: url('<?= base_url() ?>assets/vdk/images/bg-brush.png');" data-stellar-background-ratio="0.5">

    <div class="overlay"></div>

    <div class="container">

        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">

            <div class="col-md-12 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">





                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

                    <tr>

                        <td width="50%" align="center" valign="bottom" style="background:url(<?= base_url() ?>assets/edm/images/content/finsdemic-thumb-02.png);background-position:top; background-repeat:no-repeat; height:500px;">&nbsp;</td>

                        <td width="50%" align="left" valign="middle">

                            <?php echo validation_errors(); ?>

                            <?php echo form_open('Verifylogin'); ?>

                            <style>
                                input[type=text],
                                input[type=password],
                                textarea,
                                select {



                                    padding: 5px 10px;

                                    margin: 8px 0;

                                    display: inline-block;

                                    border: 1px solid #ccc;

                                    border-radius: 4px;

                                    box-sizing: border-box;

                                }



                                input[type=submit],
                                input[type=button] {



                                    background-color: #4CAF50;

                                    color: white;

                                    padding: 4px 8px;

                                    margin: 4px 0;

                                    border: none;

                                    border-radius: 5px;

                                    cursor: pointer;

                                }



                                input[type=submit]:hover {

                                    background-color: #45a049;

                                }

                                div {

                                    border-radius: 5px;

                                }

                                .datatable {

                                    border: 1px solid #333;

                                    border-collapse: collapse;

                                    width: 98%;

                                }

                                .datatable td {

                                    border: 0px solid #bbb;

                                    padding: 2px;

                                }

                                .datatable th {



                                    background-color: #BCBCBC;

                                    font-weight: bold;

                                    text-align: left;

                                    padding-left: 0px;

                                    padding-right: 0px;

                                    text-align: center;

                                }

                                .datatable caption {

                                    font: 11px Arial, Helvetica, sans-serif;

                                    color: #33517A;

                                    text-align: left;

                                    padding-top: 3px;

                                    padding-bottom: 8px;

                                }

                                .datatable tr.altrow {

                                    background-color: #DFE7F2;

                                    color: #000000;

                                }

                                .rcorners2 {

                                    border-radius: 10px;

                                    border: 2px solid #000;

                                    padding: 2px;

                                    width: 40%;

                                }

                                .clabel {
                                    color: #222222;
                                }
                            </style>

                            <br />



                            <?= $this->session->flashdata('pesan') ?>

                            <br />

                            <table width="50%" border="0" cellpadding="0" cellspacing="0" style="background-color:#f5f5f5; opacity:30;" class="rcorners2">

                                <tr>

                                    <td colspan="3" align="center" valign="middle">
                                        <h3>Members Login</h3>
                                    </td>

                                </tr>

                                <tr>

                                    <td width="29%" align="right">&nbsp; <label for="username" class="clabel">

                                            Username</label></td>

                                    <td width="1%">&nbsp;</td>

                                    <td width="70%"><input type="text" size="20" id="Username" name="Username" />

                                    </td>

                                </tr>

                                <tr>

                                    <td width="29%" align="right">&nbsp; <label for="password" class="clabel">Password</label></td>

                                    <td width="1%">&nbsp;</td>

                                    <td width="70%"><input type="password" size="20" id="Password" name="Password" /></td>

                                </tr>

                                <tr>

                                    <td width="29%">&nbsp;</td>

                                    <td width="1%">&nbsp;</td>

                                    <td width="70%">&nbsp; <input type="submit" value="Login" /> &nbsp; &nbsp;

                                        <input type="button" onclick="location.href= '<?= base_url() ?>index.php/Mcore/su/new'" id="goregs" value="Sign Up" /></td>

                                </tr>



                            </table>

                            </form>



                        </td>

                    </tr>

                </table>

            </div>

        </div>

    </div>

</div>