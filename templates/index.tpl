<html lang="en">
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
    <title>{$title}</title>
    <style>
        html, body {
            margin: 0;
        }

        body {
            background-color: white;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .container {
            text-align: center;
            text-transform: uppercase;
            margin: 20px 10% 20px 10%;
        }

        .container > h1 {
            color: green;
            margin-bottom: 40px;
        }

    </style>
</head>
<body>
<div class="container">
    <h1>{$heading}</h1>
    <table>
        <thead>
        <tr>
            <th>
                Author
            </th>
            <th>
                Title
            </th>
            <th>
                Year
            </th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$books item=book}
            {if $book->getYear() gt 2010}
                <tr style="font-weight: bold">
                    {else}
                <tr>
            {/if}
            <td>{$book->getAuthor()}</td>
            <td>{$book->getTitle()}</td>
            <td>{$book->getYear()}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>
</body>
</html>
