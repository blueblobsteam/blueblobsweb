var chunkCount = 5;
var minChunksPerPara = 3;
var chunk1 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
var chunk2 = 'Nunc vitae dignissim turpis. Nulla eleifend felis sed velit molestie non fermentum nibh pellentesque.';
var chunk3 = 'Duis egestas dapibus felis ut posuere.';
var chunk4 = 'Ut nec neque eu lacus pulvinar commodo et vel diam. Integer semper adipiscing enim eu tempus.';
var lorem = ['p', chunk1, chunk2, chunk3, chunk4];
/* The number of chunks written to the current paragraph. */
var paraChunkCount = 0;
/* Minimum number of chunks to write per paragraph. Larger number means larger paragraphs. */
function fillLorem(chunks) {
	//document.write('<p>' + chunk1 + ' ');
	var cadena = chunk1;
	for (var i = 0; i < chunks; i++) {
		var chunk = lorem[Math.floor(Math.random() * chunkCount)];
		if (chunk == 'p') {
			i--; /* decrement i, or else we'll lose a printed chunk for every p. */
			if (paraChunkCount >= minChunksPerPara) {
				/* we're writing the end of a paragraph and starting a new one. */
				paraChunkCount = 0;
				//document.write('</p><p>');
				cadena = cadena + '\n';
				paraChunkCount = 0;
			}
		}
		else {
			/* We're writing the current chunk to the current paragraph. */
			//document.write(chunk + ' ');
			cadena = cadena + chunk + ' ';
			paraChunkCount++;
		}
	}
	return cadena;
}