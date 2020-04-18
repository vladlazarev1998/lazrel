@include('includes.header')

<div class="row" id="full_admin_content">
    @include('admin.left_column')
    <div class="col-sm-9" id="admin_content">
        <div class="row">
            <div class="col-sm-12">
                <h2>Обратная связь</h2>
                <div class="category_info">
                    <table>
                        <tr>
                            <td>id</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Сообщение</td>
                        </tr>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name  }}</td>
                                <td>{{ $contact->email  }}</td>
                                <td>{{ $contact->message  }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
