$('#notification').click( function(e) {
  e.preventDefault();
alert("hii");
  bs4pop.notice('no notification till now',{
    type:'primary',
    position:'toptight',
    appendType:'append',
    closeBtn:'false',
    className:'',

  })
})