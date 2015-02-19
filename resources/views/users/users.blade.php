<tbody id="users-table">
@foreach($users as $user)
    <tr>
        <td>{{ $user->username }}</td>
        <td style="text-align: center;"><a
                    onclick="EditUser('{{ URL::action('UserAdminController@postEditUser') }}', '{{ $user->id }}', '{{ $user->username }}', '{{ csrf_token() }}')"
                    class="btn btn-primary">Edit</a></td>
        <td style="text-align: center;"><a
                    onclick="DeleteUser('{{ URL::action('UserAdminController@postDeleteUser') }}', '{{ $user->id }}', '{{ csrf_token() }}')"
                    class="btn btn-danger">Delete</a></td>
    </tr>
@endforeach
</tbody>
