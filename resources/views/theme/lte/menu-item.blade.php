@if ($item['submenu'] == [])
    <li class="nav-item ">
        <a href="{{url($item['url'])}}" class="nav-link {{getMenuActivo($item['url'])}} ">
            <i class="nav-icon fas {{$item['icono']}} text-info"></i>
            <p>
                {{$item["titlem"]}}
                <!-- <span class="right badge badge-danger">New</span> -->
            </p>
        </a>
    </li>
@else
<li class="nav-item has-treeview  ">
        <a href="javascript:;" class="nav-link ">
          <i class="nav-icon fa {{$item['icono']}}  "></i>
          <p>
            {{$item["titlem"]}}
            <i class="right fas fa-angle-left text-warning"></i>
          </p>
        </a>
        <ul class="nav nav-treeview ">
            @foreach ($item['submenu'] as $submenu)
                @include('theme.lte.menu-item', ['item' => $submenu])
            @endforeach
        </ul>
    </li>
@endif