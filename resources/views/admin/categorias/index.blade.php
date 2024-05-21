@extends ('layouts.app')

@section('body')
<table>
     <thread>
         <th>#ID </th>
         <th>Nome</th>
         <th>Descrição</th>
     </thread>
     <tbody>
          @forelse ($categorias as $categoria)
              <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nome}}</td>
                    <td>{{$categoria->descricao}}</td>
              </tr>
          @empty
              <Tr>
                   <Td>Sem categorias cadastrado </td>
              </tr>
          @endforelse 
     </tbody>
</table>

@endsection