<ul>
    @foreach ($employes as $employe)
        <li>{{ $employe->ENAME }}</li>
            <ul>
                {{--  @php
                    echo json_encode($employe);
                @endphp  --}}
                @foreach ($employe["child_emp"] as $emp)
                    @include('employe_child', ['employe_child' => $emp])
                @endforeach
            </ul>
    @endforeach
</ul>
