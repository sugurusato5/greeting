<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <?php if($msg == 'morning') : ?>
        <h2>朝のあいさつ</h2>
        <h3>おはようございます</h3>
    <?php elseif ($msg == 'afternoon') : ?>
        <h2>昼のあいさつ</h2>
        <h3>こんにちは</h3>
    <?php elseif ($msg == 'evening') : ?>
        <h2>夕方のあいさつ</h2>
        <h3>こんばんは</h3>
    <?php elseif ($msg == 'night') : ?>
        <h2>夜のあいさつ</h2>
        <h3>こんばんは</h3>
    <?php elseif ($msg == 'freeword') : ?>
        <h2>自由なメッセージ</h2>
        <h3>{{$comment}}</h3>
    <?php elseif ($msg == 'random') : ?>
        <h2>ランダムなメッセージ</h2>
        <h3><?php $greeting = ['おはよう','こんにちは','こんばんは','おやすみ']; 
                $random = array_rand($greeting);
                echo $greeting[$random]; ?></h3>
    <?php endif ; ?>
</body>
</html>

