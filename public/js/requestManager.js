/**
 * Created by Cristian Parada on 28/06/2016.
 */

var $sampleIntput = "2\n4 5\nUPDATE 2 2 2 4\nQUERY 1 1 1 3 3 3\nUPDATE 1 1 1 23\nQUERY 2 2 2 4 4 4\nQUERY 1 1 1 3 3 3\n2 4" +
    "\nUPDATE 2 2 2 1\nQUERY 1 1 1 1 1 1\nQUERY 1 1 1 2 2 2\nQUERY 2 2 2 2 2 2";
var $sampleOutput = "4\n4\n27\n0\n1\n1";
$('textarea[name=sinput]').val($sampleIntput);
$('textarea[name=soutput]').val($sampleOutput);
function config() {
    $.ajax({
        method: "POST",
        url: $('form[name=formCreate]').attr('action'),
        data: {
            _token: $('input[name=_token]').attr('value'),
            input: $('textarea[name=input]').val(),
        }
    }).done(function (msg) {
        $('textarea[name=output]').val(msg.output);
    });
}