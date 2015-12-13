                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?=base_url('admin')?>">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('admin/volunteers')?>">
                                    <span class="icon fa fa-table"></span><span class="title">Volunteers</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body">
                    <div class="page-title">
                        <span class="title">Volunteer Calls</span>
                        <div class="description">List of students who applied for volunteer call</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card" style="overflow-x:scroll">
                                <div class="card-header">

                                    <div class="card-title">
                                    <div class="title">Volunteers</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Phone</th>
                                                <th>Section</th>
                                                <th>Member</th>
                                                <th>College</th>
                                                <th>Whatsapp</th>
                                                <th>Hrs</th>
                                                <th>Exp</th>
                                                <th>Design</th>
                                                <th>Publicity</th>
                                                <th>Email</th>
                                                <th>Time</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <? foreach($vol as $v){?>
                                            <tr>
                                            <?
                                            unset($v['status']);
                                            $x=$v['mid'];
                                            unset($v['mid']);
                                            foreach($v as $d){?>
                                                <td>
                                                <?=$d?>
                                                </td>
                                            <? }?>
                                            <td>
                                                <button class="btn btn-color1 btn-contact-form" onclick="location.href='/admin/volunteers/delete/<?=$x?>'"><i class="fa fa-trash"></i></button>
                                            </td>
                                            </tr>
                                        <? } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>