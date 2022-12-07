<!DOCTYPE HTML>
<html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user
        <link href="https://www.google-analytics.com" rel="dns-prefetch">
        <link rel="shortcut icon" href="https://matadeveloper.com/frontend/logo/Logo1.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <style type="text/css">
            textarea, iframe {
                border: 2px solid #ddd;
                height: 500px;
                width: 100%;      
            }
        </style>
    </head>
    <body>
<table width="100%" border="0" cellspacing="5" cellpadding="5">
    <tr>
        <td width="50%" scope="col">&nbsp;</td>
        <td width="50%" align="left" scope="col">
            <input onclick="runCode();" class="btn btn-primary" type="button" value="Run Code">
        </td>
    </tr>
    <tr>
        <td> 
            <form>
                <strong>Code</strong>
                <textarea name="sourceCode" id="sourceCode">
<html>
<head>
<title>Hello</title>
</head>
<body>
<h1>Hello!</h1>
<p>Write HTML, CSS or JavaScript code here and click 'Run Code'.</p>
</body>
</html>

<script type="text/javascript">
            function runCode()
            {
                var content = document.getElementById('sourceCode').value;
                var iframe = document.getElementById('targetCode');
                iframe = (iframe.contentWindow) ? iframe.contentWindow : (iframe.contentDocument.document) ? iframe.contentDocument.document : iframe.contentDocument;
                iframe.document.open();
                iframe.document.write(content);
                iframe.document.close();
                return false;
            }
            runCode();
        </script>