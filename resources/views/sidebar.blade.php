<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        {{--<form action="#" method="get" class="sidebar-form">--}}
            {{--<div class="input-group">--}}
                {{--<input type="text" name="q" class="form-control" placeholder="Search..."/>--}}
                {{--<span class="input-group-btn">--}}
  {{--<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
{{--</span>--}}
            {{--</div>--}}
        {{--</form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="/teacher/create"><span>Cadastrar usuário - professor</span></a></li>
          <li class="active"><a href="/reuniao/colegiado/index"><span>Reunião Colegiado</span></a></li>
            <li><a href="#"><span>Another Link</span></a></li>
            <li class="treeview">
                <a href="{{url('teacher')}}"><span>Lista de professores</span></a></li></li>
            <li class="treeview">
                <a href="{{url('teacher/create')}}"><span>Cadastrar usuário - professor</span></a></li>
            <li class="treeview">
                <a href=""><span>Cadastrar regra de aproveitamento</span></a></li>
            <li class="treeview">
                <a href="{{url('itens')}}"><span>Cadastrar item de aproveitamento</span></a></li>
            <li class="treeview">
                <a href="{{url('process')}}"><span>Processos</span></a></li>
            <li class="treeview">
                <a href="{{url('reuniao/colegiado/index')}}">Cadastrar reunião de colegiado</span></a></li>
            {{--<li><a href="#"><span>Another Link</span></a></li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>