<table>
    <thead>
        <tr>
            <th>Empresa o Cliente</th>
            <th>Contacto</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Nit</th>
            <th>#Obra</th>
            <th>Nombre Obra</th>
            <th>Lugar Obra</th>
            <th>Fecha Recibido</th>
            <th>Fecha Cotizada</th>
            <th>Valor A.Iva</th>
            <th>Valor Adjudicado</th>
            <th>Tipologia</th>
            <th>Estado</th>
            <th>$M2</th>
            <th>Incluye Montaje</th>
            <th>Origen</th>


        </tr>
    </thead>
    <tbody>
        @foreach($vorte as $row)
        <tr>

            <td>{{$row->clientes->Empresa}}</td>
            <td>{{$row->clientes->Contacto}}</td>
            <td>{{$row->clientes->Correo}}</td>
            <td>{{$row->clientes->Telefono}}</td>
            <td>{{$row->clientes->Nit}}</td>
            <td>{{$row->Numero_Obra}}</td>
            <td>{{$row->Nombre_Obra}}</td>
            <td>{{$row->Lugar_Obra}}</td>
            <td>{{$row->Fecha_Recibido}}</td>
            <td>{{$row->Fecha_Cotizada}}</td>
            <td>${{number_format($row->Valor_Antes_Iva)}}</td>
            <td>${{number_format($row->Valor_Adjudicado)}}</td>
            <td>{{$row->Tipologia}}</td>
            <td>{{$row->Estado}}</td>
            <td>{{$row->m2}}</td>
            <td>{{$row->Incluye_Montaje}}</td>
            <td>{{$row->Origen}}</td>



        </tr>

        @endforeach

    </tbody>

</table>