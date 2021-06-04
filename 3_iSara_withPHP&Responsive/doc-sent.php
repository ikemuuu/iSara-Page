<?php 

	$fillStatus = 'hide';
	$blankStatus = 'hide';

	if(empty($_POST['last-name']) || empty($_POST['first-name']) || empty($_POST['email'])) {
		$blankStatus = 'show';
	} else {
		$fillStatus = 'show';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>資料請求</title>
	<link rel="shortcut icon" href="https://isara.life/wp-content/uploads/2018/10/favicon.ico">
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="responsive.css">
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>

<main>
	<section class="info-fill-wrapper <?php echo $fillStatus ?>">
		<div class="container">
			<p>ノマドエンジニア講座iSaraの資料請求をいただき、ありがとうございます。<br>
			ご登録いただいたメールアドレスに、資料をお送りいたしました。</p>
			<p>※届いていない場合、迷惑メールフォルダに入っていないかご確認ください。<br>
			そちらにも届いていない場合、isarafreelance@gmail.comまでご連絡ください。</p>
		</div>
	</section>
	<section class="info-blank-wrapper <?php echo $blankStatus ?>">
		<div class="container">
			<div class="info-blank-title">
				<h1>資料請求</h1>
				<p>必要事項をご記入の上、送信ボタンをクリックしてください。</p>
			</div>
			<div class="caution">
				<p class="caution-last-name red-text"><?php if(empty($_POST['last-name']) || empty($_POST['first-name'])){echo "姓名 は必須入力です。";} ?></p>
				<p class="caution-email red-text"><?php if(empty($_POST['email'])){echo "メールアドレス は必須入力です。";} ?></p>
			</div>
			<div class="info-table">
				<table>
					<tbody>
						<tr>
							<th colspan="3" class="title">資料請求</th>
						</tr>
						<tr>
							<th class="item-title">姓名 <span class="must">必須</span></th> 
							<td  colspan="2"> <p class="red-text"><?php if(empty($_POST['last-name']) || empty($_POST['first-name'])){echo "姓名 は必須入力です。";} ?></p>（性）<input type="text" class="name" value="<?php echo $_POST['last-name'] ?>">
							（名）<input type="text" class="name" value="<?php echo $_POST['first-name'] ?>"></td>
						</tr>
						<tr>
							<th class="item-title">メールアドレス <span class="must">必須</span></th> <td  colspan="2"><p  class="red-text">
							<?php if(empty($_POST['email'])){echo "メールアドレス は必須入力です。";} ?>
							</p><input type="text" class="email" value="<?php echo $_POST['email'] ?>"></td>
						</tr>
						<tr>
							<th class="item-title remark">備考</th> <td  colspan="2"><textarea><?php echo $_POST['question'] ?></textarea></td> 
						</tr>
					</tbody>
				</table>
			</div>
			<div class="submit-btn">
				<a href="#">送　信</a>
			</div>
		</div>
	</section>
</main>

</body>  
</html>