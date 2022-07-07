function get(elementId) {
  return document.getElementById(elementId);
}

function compressCSS(f) {
  var element = get(f);
  var  h = /@(media|-w|-m|-o|keyframes|page)(.*?)\{([\s\S]+?)?\}\}/gi;
  var value = editor.getValue();
  var length = value.length;

  (value = sa.checked || sc.checked ? value.replace(/\/\*[\w\W]*?\*\//gm, "") : value.replace(/(\n+)?(\/\*[\w\W]*?\*\/)(\n+)?/gm, "\n$2\n")),
  (value = value.replace(/([\n\r\t\s ]+)?([\,\:\;\{\}]+?)([\n\r\t\s ]+)?/g, "$2")),
  (value = sc.checked ? value : value.replace(/\}(?!\})/g, "}\n")),
  (value = bi.checked ? value.replace(h, function (a) {  return a.replace(/\n+/g, "\n  "); }) : value.replace(h, function (a) { return a.replace(/\n+/g, ""); })),
  (value = sas.checked ? value.replace(/;/g, '; ').replace(/; \}/g, ';}') : value),
  // (value = sac.checked ? value.replace(/:/g, ': ').replace(/: :/g, '::'): value), 
  (value = bi.checked && !sc.checked ? value.replace(/\}\}/g, "}\n}") : value),
  (value = bi.checked && !sc.checked ? value.replace(/@(media|-w|-m|-o|keyframes)(.*?)\{/g, "@$1$2{\n  ") : value),
  (value = cm.checked ? value.replace(/;\}/g, "}") : value.replace(/;\}/g, ";}").replace(/;+\}/g, ";}").replace(/\};\}/g, "}}")),
  (value = value.replace(/\:0(px|em|pt)/gi, ":0")),
  (value = value.replace(/ 0(px|em|pt)/gi, " 0")),
  (value = value.replace(/\s+\!important/gi, " !important")),
  (value = value.replace(/(^\n+|\n+$)/, "")),
  (editor.setValue(value))
}

function clearField(c) {
  editor.setValue('')
}
function selectAll(a) {
  editor.selectAll();
}
var hc = get("highlightCode"),
  sa = get("stripAllComment"),
  sc = get("superCompact"),
  cm = get("keepLastComma"),
  bi = get("betterIndentation"),
  bs = get("breakSelector"),
  sb = get("spaceBetween"),
  ip = get("inlineSingleProp"),
  rs = get("removeLastSemicolon"),
  il = get("inlineLayout"),
  si = get("singleBreak"),
  sas = get("spaceAfterSemicolon");
  sac = get("spaceAfterColon");
