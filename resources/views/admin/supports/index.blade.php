<h1>Listagem dos chamados</h1>
<a href="{{route('supports.create')}}">Criar chamado </a>
<table>
    <thead>
        <th>assuntos</th>
        <th>status</th>
        <th>descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($supports as $support)
            <tr>
                <td>{{$support->subject}}</td>
                <td>{{$support->status}}</td>
                <td>{{$support->body}}</td>
                <td> <a href="{{route('supports.show', $support->id)}}"> Detalhes</a> </td>
                <td> <a href="{{route('supports.edit', $support->id)}}"> Editar</a> </td>
            </tr>
        @endforeach
    </tbody>
</table>
