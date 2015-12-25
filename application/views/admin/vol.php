                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?=base_url('admin')?>">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('admin/volunteers')?>">
                                    <span class="icon fa fa-table"></span><span class="title">Delegates</span>
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
                        <span class="title">Registrations</span>
                        <div class="description"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card" style="overflow-x:scroll">
                                <div class="card-header">

                                    <div class="card-title">
                                    <div class="title">Non CS Registrations</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Sex</th>
                                                <th>Mtype</th>
                                                <th>Mid</th>
                                                <th>Section</th>
                                                <th>College</th>
                                                <th>why</th>
                                                <th>what</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <? foreach($vol as $v){?>
                                            <tr>
                                            <?
                                            unset($v['status']);
                                            unset($v['food']);
                                            unset($v['acco1']);
                                            unset($v['acco2']);
                                            unset($v['acco3']);
                                            unset($v['payment_status']);
                                            $x=$v['id'];
                                            unset($v['id']);
                                            foreach($v as $d){?>
                                                <td>
                                                <?=$d?>
                                                </td>
                                            <? }?>
                                            <td>
                                                <button class="btn btn-color1 btn-contact-form" onclick="location.href='/admin/volunteers/delete/<?=$x?>'"><i class="fa fa-trash"></i></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-color1 btn-contact-form" onclick="location.href='/admin/volunteers/approve/<?=$x?>'"><i class="fa fa-check-circle"></i></button>
                                            </td>
                                            </tr>
                                        <? } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card" style="overflow-x:scroll">
                                <div class="card-header">

                                    <div class="card-title">
                                    <div class="title">Approved List</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Sex</th>
                                                <th>Mtype</th>
                                                <th>Mid</th>
                                                <th>Section</th>
                                                <th>College</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <? foreach($app as $v){?>
                                            <tr>
                                            <?
                                            unset($v['status']);
                                            unset($v['food']);
                                            unset($v['acco1']);
                                            unset($v['acco2']);
                                            unset($v['acco3']);
                                            unset($v['payment_status']);
                                            unset($v['why']);
                                            unset($v['what']);
                                            $x=$v['id'];
                                            unset($v['id']);
                                            foreach($v as $d){?>
                                                <td>
                                                <?=$d?>
                                                </td>
                                            <? }?>
                                            </tr>
                                        <? } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card" style="overflow-x:scroll">
                                <div class="card-header">

                                    <div class="card-title">
                                    <div class="title">Final List</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Sex</th>
                                                <th>Mtype</th>
                                                <th>Mid</th>
                                                <th>Section</th>
                                                <th>College</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <? foreach($fin as $v){?>
                                            <tr>
                                            <?
                                            unset($v['status']);
                                            unset($v['food']);
                                            unset($v['acco1']);
                                            unset($v['acco2']);
                                            unset($v['acco3']);
                                            unset($v['payment_status']);
                                            unset($v['why']);
                                            unset($v['what']);
                                            $x=$v['id'];
                                            unset($v['id']);
                                            foreach($v as $d){?>
                                                <td>
                                                <?=$d?>
                                                </td>
                                            <? }?>

                                            </tr>
                                        <? } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card" style="overflow-x:scroll">
                                <div class="card-header">

                                    <div class="card-title">
                                    <div class="title">Mail List</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Sex</th>
                                                <th>Mtype</th>
                                                <th>Mid</th>
                                                <th>Section</th>
                                                <th>College</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <? foreach($email as $v){?>
                                            <tr>
                                            <?
                                            unset($v['status']);
                                            unset($v['food']);
                                            unset($v['acco1']);
                                            unset($v['acco2']);
                                            unset($v['acco3']);
                                            unset($v['payment_status']);
                                            unset($v['why']);
                                            unset($v['what']);
                                            $x=$v['id'];
                                            unset($v['id']);
                                            foreach($v as $d){?>
                                                <td>
                                                <?=$d?>
                                                </td>
                                            <? }?>
                                            <td>
                                                <button class="btn btn-color1 btn-contact-form" onclick="location.href='/admin/volunteers/mail/<?=$x?>'"><i class="fa fa-check-circle"></i></button>
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