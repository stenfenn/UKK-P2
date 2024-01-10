<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Kalkulator</title>

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 400px;
            margin-top: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .form-check {
            margin-bottom: 10px;
        }
    </style>

</head>

<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Kalkulator</h5>
            <form>
                <div class="mb-3">
                    <label class="col-form-label">Angka 1 :</label>
                    <input type="number" class="form-control" id="angka1">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Angka 2 :</label>
                    <input type="number" class="form-control" id="angka2">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operation" id="tambah" value="tambah">
                    <label class="form-check-label" for="tambah">
                        + (Tambah)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operation" id="kurang" value="kurang">
                    <label class="form-check-label" for="kurang">
                        - (Kurang)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operation" id="kali" value="kali">
                    <label class="form-check-label" for="kali">
                        * (Kali)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operation" id="bagi" value="bagi">
                    <label class="form-check-label" for="bagi">
                        / (Bagi)
                    </label>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hasil</label>
                    <input type="text" id="hasil" class="form-control" placeholder="Hasil" readonly>
                </div>
                <button type="button" class="btn btn-outline-warning" onclick="proses()">Hitung</button>
                <button type="button" class="btn btn-outline-secondary" onclick="hapus()">Delete</button>
            </form>
        </div>
    </div>

    <script>
        function proses() {
            var getAngka1 = parseFloat(document.getElementById("angka1").value);
            var getAngka2 = parseFloat(document.getElementById("angka2").value);
            var operator = document.querySelector('input[name="operation"]:checked');
            var hasilElement = document.getElementById("hasil");

            if (operator) {
                var operatorValue = operator.value;
                var hitung;

                switch (operatorValue) {
                    case "tambah":
                        hitung = getAngka1 + getAngka2;
                        break;
                    case "kurang":
                        hitung = getAngka1 - getAngka2;
                        break;
                    case "bagi":
                        hitung = getAngka1 / getAngka2;
                        break;
                    case "kali":
                        hitung = getAngka1 * getAngka2;
                        break;
                    default:
                        console.log("Pilih operator");
                        break;
                }


                hasilElement.value = hitung;
            } else {
                console.log("Pilih operator");
            }
        }

        function hapus() {
            document.getElementById("angka1").value = "";
            document.getElementById("angka2").value = "";
            document.getElementById("hasil").value = "";
            // Uncheck all radio buttons
            var radioButtons = document.querySelectorAll('input[name="operation"]');
            radioButtons.forEach(function(radioButton) {
                radioButton.checked = false;
            });
        }
    </script>
</body>

</html>