<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Hello World</h1><br>
        <h2>ID:{{ $data['id'] }}</h2><br>
        <h2>Name:{{ $data['name'] }}</h2>
        <h2>{{ $data['age'] or '年龄未知'}}</h2>
        <h2>链接:{!! $data['title'] !!}</h2>
        <h3>原始输出</h3>
        @{{$data['title']}}
        <h3>{{ date('Y-m-d') }}</h3>
        <h3>条件判断</h3>
            @if($data['age']<10)
                <h4>孩子</h4>
            @elseif($data['age']<=20)
                <h4>青年</h4>
            @else
                <h4>挣钱</h4>
            @endif

        @foreach( $list as $key=>$value)
            <li>{{ $value['title'] }}</li>
        @endforeach
</body>
</html>