var direccion = window.location.href

var _conoceme = "conoceme.php"
var _personas = "personas.php"
var _empresas = "empresas.php"
var _blog = "blog_dinamico.php"
var _recursos = "recursos.php"

  
  if (direccion.toLowerCase().includes(_conoceme.toLowerCase())) {
    $("#link_conoceme").addClass("bg-white")
    $("#link_conoceme").addClass("rounded-pill")
    $("#link_conoceme").removeClass("text-light")
    $("#link_conoceme").addClass("text-dark")
    // mainString contains substringToCheck
}

if (direccion.toLowerCase().includes(_empresas.toLowerCase())) {
    $("#link_empresas").addClass("bg-white")
    $("#link_empresas").addClass("rounded-pill")
    $("#link_empresas").removeClass("text-light")
    $("#link_empresas").addClass("text-dark")
}

if (direccion.toLowerCase().includes(_personas.toLowerCase())) {
    $("#link_personas").addClass("bg-white")
    $("#link_personas").addClass("rounded-pill")
    $("#link_personas").removeClass("text-light")
    $("#link_personas").addClass("text-dark")
}

if (direccion.toLowerCase().includes(_blog.toLowerCase())) {
    $("#link_blog").addClass("bg-white")
    $("#link_blog").addClass("rounded-pill")
    $("#link_blog").removeClass("text-light")
    $("#link_blog").addClass("text-dark")
}

if (direccion.toLowerCase().includes(_recursos.toLowerCase())) {
    $("#link_recursos").addClass("bg-white")
    $("#link_recursos").addClass("rounded-pill")
    $("#link_recursos").removeClass("text-light")
    $("#link_recursos").addClass("text-dark")
}

