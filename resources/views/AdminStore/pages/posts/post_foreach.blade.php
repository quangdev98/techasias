@foreach( $post as $p )
    <tr class="" align="center">
        <td>{{ $p->id }}</td>
        <td>
            <div class="textContent">{{ $p->title }}</div>
        </td>
        <td>{{ $p->title }}</td>
        <td>{{ $p->categoryName }}</td>
        <td>{{ $p->author }}</td>
        <td>
            {{ $p->status == 1 ? 'Bản nháp' : ''}}
            {{ $p->status == 2 ? 'Chờ duyệt' : ''}}
            {{ $p->status == 3 ? 'Đã xuất bản' : ''}}
        </td>
        <td class="center"><a href="#" data-toggle="modal"
                                data-url="{{ route('ad.destroy-post', ['id'=> $p->id]) }}"
                                data-target="#delete-modal" class="destroyForm"><i
                    class="fad fa-trash-alt"></i></a></td>
        <td class="center"><a href="{{ route('ad.edit-post',['id'=> $p->id]) }}"><i
                    class="fad fa-pencil"></i></a></td>
    </tr>
@endforeach
