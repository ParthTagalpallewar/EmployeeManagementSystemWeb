<link rel="stylesheet" href="<?php echo base_url(); ?>css/dashboard.css">

<section class="px-4 pt-5 mt-4 sec-main my-container">

    <div class="container py-4">

        <?php

if ($this->session->flashdata('msg')) {
    echo '
        <div class="container">
            <div class="alert alert-danger">
                ' . $this->session->flashdata("msg") . '
            </div>
        </div>
        ';
}
if ($this->session->flashdata('msgSuccess')) {
    echo '
        <div class="container">
            <div class="alert alert-success">
                ' . $this->session->flashdata("msgSuccess") . '
            </div>
        </div>
        ';
}
?>

        <!-- Task Card -->
        <div class=" shadow-sm card-task p-3">
            <h4>List of Employees</h4>

            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">ID</th>
                        <th scope="col">Applicant Name</th>
                        <th scope="col">Subject</th>

                        <th scope="col">Application</th>
                        <th scope="col">From Department</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Type</th>
                        <th scope="col">Remark</th>
                        <th scope="col">Accept</th>
                        <th scope="col">Decline</th>


                    </tr>

                </thead>

                <tbody>
                    <tr>

                        <?php if (!empty($applications)) {foreach ($applications as $application) {?>
                        <?php
                    $attributes = array('role' => 'form');
                    echo form_open_multipart('Hod/IoApplication/ad_io_application/' . $application['id']);
                    ?>

                        <form action="" name="registerForm" id="registerForm signupform" class="signupform"
                            method="post">
                    <tr>
                        <th scope="row"><?php echo $application['id'] ?></th>
                        <th scope="row"><?php echo $application['applicant_name'] ?></th>

                        <th scope="row"><?php echo $application['title'] ?></th>

                        <th scope="row">
                            <a href="#" style="font-size: 12px; border-radius: 5px" class="btn btn-success"> View
                            </a>
                        </th>
                        <td>
                            <?php 
                            if($application['from_dept']==1)
                            {
                            echo 'Computer Engineering';
                            }else if($application['from_dept']==2)
                            {
                                echo 'Information Technology';
                            }else if($application['from_dept']==3)
                            {
                                echo 'Mechanical Engineering';
                            }else if($application['from_dept']==4)
                            {
                                echo 'Electronics and Telecomunication Engineering';
                            }else if($application['from_dept']==5)
                            {
                                echo 'Civil Engineering';
                            }
                            ?>
                        </td>
                        <td><?php echo $application['date'] ?></td>
                        <td>
                            <?php 
                            if($application['status_id']==1)
                            {
                            echo 'APPLIED';
                            }else if($application['status_id']==2)
                            {
                                echo 'APPROVED BY HOD';
                            }else if($application['status_id']==3)
                            {
                                echo 'APPROVED BY REGISTRAR';
                            }else if($application['status_id']==4)
                            {
                                echo 'APPROVED BY PRINCIPAL';
                            }else if($application['status_id']==5)
                            {
                                echo 'Declined By Hod';
                            }else if($application['status_id']==6)
                            {
                                echo 'Declined By Registrar';
                            }else if($application['status_id']==7)
                            {
                                echo 'Declined By Principal';
                            }
                            else if($application['status_id']==8)
                            {
                                echo 'Applied By HOD';
                            }
                            else if($application['status_id']==9)
                            {
                                echo 'Applied By Principal';
                            }
                            else if($application['status_id']==10)
                            {
                                echo 'Applied By Registrar';
                            }
                            ?>
                        </td>

                        <td>
                            <?php 
                            if($application['application_type'] ==1 )
                            {
                                echo 'INWARD';
                            }else{
                                echo 'OUTWARD';
                            }
                            ?>
                        </td>
                        <td><input type="text" name="remark" id="remark" class="form-input form-control "
                                placeholder="Add Remark Here">
                        </td>
                        <td>

                            <input type="submit" name="submit" id="submit" class="form-submit btn btn-primary"
                                value="Accept" />


                        </td>

                        <td>

                            <input type="submit" name="submit" id="submit" class="form-submit btn btn-danger"
                                value="Decline" />


                        </td>

                        </form>
                    </tr>


                    <?php }} ?>

                    </tr>
                </tbody>
            </table>
        </div>


    </div>


</section>