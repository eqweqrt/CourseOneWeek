<html>
<head>
    <title><?= $title ?></title>
    <style>
        table, td {
            border: solid #2b2929 1px;
            border-collapse: collapse;
        }

        #layout {
            width: 800px;
            margin: auto;
        }

        #layout td {
            padding: 20px;
        }

        #sidebar {
            width: 300px
        }
    </style>
</head>
<body>
<table id="layout">
    <tr>
        <td colspan="2"><?= $header ?></td>
    </tr>
    <tr>