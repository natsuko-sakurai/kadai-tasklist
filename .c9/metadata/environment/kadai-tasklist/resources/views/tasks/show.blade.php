{"filter":false,"title":"show.blade.php","tooltip":"/kadai-tasklist/resources/views/tasks/show.blade.php","undoManager":{"mark":30,"position":30,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","<!-- Write content for each page here -->","","@endsection"],"id":1}],[{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"insert","lines":["s"],"id":2}],[{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"remove","lines":["s"],"id":3}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":41},"action":"remove","lines":["<!-- Write content for each page here -->"],"id":4}],[{"start":{"row":4,"column":0},"end":{"row":6,"column":34},"action":"insert","lines":["<h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>"],"id":5}],[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"remove","lines":["e"],"id":6},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"remove","lines":["g"]},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["a"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["s"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["s"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["e"]},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["m"]}],[{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"insert","lines":["t"],"id":7},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["a"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["s"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["s"]},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["s"],"id":8},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["s"]}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["k"],"id":9}],[{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"remove","lines":["e"],"id":10},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"remove","lines":["g"]},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"remove","lines":["a"]},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"remove","lines":["s"]},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"remove","lines":["s"]},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"remove","lines":["e"]},{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"remove","lines":["m"]}],[{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"insert","lines":["t"],"id":11},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":["a"]},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["s"]},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["k"]}],[{"start":{"row":6,"column":31},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":6,"column":31},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":80},"action":"insert","lines":["{!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id]) !!}"],"id":14}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":[" "],"id":15},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":[" "]},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"insert","lines":[" "]},{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"remove","lines":["e"],"id":16},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"remove","lines":["g"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"remove","lines":["a"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"remove","lines":["s"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"remove","lines":["s"]},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["e"]},{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"remove","lines":["m"]}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":["t"],"id":17},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["a"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["s"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["k"]}],[{"start":{"row":8,"column":66},"end":{"row":8,"column":67},"action":"remove","lines":["e"],"id":18},{"start":{"row":8,"column":65},"end":{"row":8,"column":66},"action":"remove","lines":["g"]},{"start":{"row":8,"column":64},"end":{"row":8,"column":65},"action":"remove","lines":["a"]},{"start":{"row":8,"column":63},"end":{"row":8,"column":64},"action":"remove","lines":["s"]},{"start":{"row":8,"column":62},"end":{"row":8,"column":63},"action":"remove","lines":["s"]},{"start":{"row":8,"column":61},"end":{"row":8,"column":62},"action":"remove","lines":["e"]},{"start":{"row":8,"column":60},"end":{"row":8,"column":61},"action":"remove","lines":["m"]}],[{"start":{"row":8,"column":60},"end":{"row":8,"column":61},"action":"insert","lines":["t"],"id":19},{"start":{"row":8,"column":61},"end":{"row":8,"column":62},"action":"insert","lines":["a"]},{"start":{"row":8,"column":62},"end":{"row":8,"column":63},"action":"insert","lines":["s"]},{"start":{"row":8,"column":63},"end":{"row":8,"column":64},"action":"insert","lines":["k"]}],[{"start":{"row":8,"column":74},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":9,"column":4},"end":{"row":10,"column":0},"action":"insert","lines":["",""]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":12,"column":25},"action":"insert","lines":["{!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除') !!}","    {!! Form::close() !!}"],"id":22}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":28},"action":"remove","lines":["e"],"id":23},{"start":{"row":10,"column":26},"end":{"row":10,"column":27},"action":"remove","lines":["g"]},{"start":{"row":10,"column":25},"end":{"row":10,"column":26},"action":"remove","lines":["a"]},{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"remove","lines":["s"]},{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"remove","lines":["s"]},{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"remove","lines":["e"]},{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"remove","lines":["m"]}],[{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"insert","lines":["t"],"id":24},{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"insert","lines":["a"]},{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"insert","lines":["s"]},{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"insert","lines":["k"]}],[{"start":{"row":10,"column":47},"end":{"row":10,"column":48},"action":"remove","lines":["e"],"id":25},{"start":{"row":10,"column":46},"end":{"row":10,"column":47},"action":"remove","lines":["g"]},{"start":{"row":10,"column":45},"end":{"row":10,"column":46},"action":"remove","lines":["a"]},{"start":{"row":10,"column":44},"end":{"row":10,"column":45},"action":"remove","lines":["s"]},{"start":{"row":10,"column":43},"end":{"row":10,"column":44},"action":"remove","lines":["s"]},{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"remove","lines":["e"]},{"start":{"row":10,"column":41},"end":{"row":10,"column":42},"action":"remove","lines":["m"]}],[{"start":{"row":10,"column":41},"end":{"row":10,"column":42},"action":"insert","lines":["t"],"id":26},{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"insert","lines":["a"]},{"start":{"row":10,"column":43},"end":{"row":10,"column":44},"action":"insert","lines":["s"]},{"start":{"row":10,"column":44},"end":{"row":10,"column":45},"action":"insert","lines":["k"]}],[{"start":{"row":10,"column":64},"end":{"row":10,"column":65},"action":"remove","lines":["e"],"id":27},{"start":{"row":10,"column":63},"end":{"row":10,"column":64},"action":"remove","lines":["g"]},{"start":{"row":10,"column":62},"end":{"row":10,"column":63},"action":"remove","lines":["a"]},{"start":{"row":10,"column":61},"end":{"row":10,"column":62},"action":"remove","lines":["s"]},{"start":{"row":10,"column":60},"end":{"row":10,"column":61},"action":"remove","lines":["s"]},{"start":{"row":10,"column":59},"end":{"row":10,"column":60},"action":"remove","lines":["e"]},{"start":{"row":10,"column":58},"end":{"row":10,"column":59},"action":"remove","lines":["m"]}],[{"start":{"row":10,"column":58},"end":{"row":10,"column":59},"action":"insert","lines":["t"],"id":28},{"start":{"row":10,"column":59},"end":{"row":10,"column":60},"action":"insert","lines":["a"]},{"start":{"row":10,"column":60},"end":{"row":10,"column":61},"action":"insert","lines":["s"]},{"start":{"row":10,"column":61},"end":{"row":10,"column":62},"action":"insert","lines":["k"]}],[{"start":{"row":4,"column":34},"end":{"row":4,"column":35},"action":"remove","lines":["ジ"],"id":29},{"start":{"row":4,"column":33},"end":{"row":4,"column":34},"action":"remove","lines":["ー"]},{"start":{"row":4,"column":32},"end":{"row":4,"column":33},"action":"remove","lines":["セ"]},{"start":{"row":4,"column":31},"end":{"row":4,"column":32},"action":"remove","lines":["ッ"]},{"start":{"row":4,"column":30},"end":{"row":4,"column":31},"action":"remove","lines":["メ"]}],[{"start":{"row":4,"column":30},"end":{"row":4,"column":33},"action":"insert","lines":["タスク"],"id":36}],[{"start":{"row":8,"column":43},"end":{"row":8,"column":44},"action":"remove","lines":["ジ"],"id":37},{"start":{"row":8,"column":42},"end":{"row":8,"column":43},"action":"remove","lines":["ー"]},{"start":{"row":8,"column":41},"end":{"row":8,"column":42},"action":"remove","lines":["セ"]},{"start":{"row":8,"column":40},"end":{"row":8,"column":41},"action":"remove","lines":["ッ"]},{"start":{"row":8,"column":39},"end":{"row":8,"column":40},"action":"remove","lines":["メ"]}],[{"start":{"row":8,"column":39},"end":{"row":8,"column":42},"action":"insert","lines":["タスク"],"id":44}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":11},"end":{"row":14,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527575669361,"hash":"8f45e78f15d9613250ecbdebd157018fa9aa0ce9"}