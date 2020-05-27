@component('mail::message')
    <div>
        #Contact information <br>
        <strong> Name: </strong> {{$data['name']}} <br>
        <strong> Email: </strong> {{$data['email']}} <br>
        <strong> Address: </strong> {{$data['address']}} <br>
        <strong> Telephone No: </strong> {{$data['telephone_number']}} <br>
        <strong> Message: </strong> {{$data['message']}}
    </div>

Thanks,<br>

@endcomponent
