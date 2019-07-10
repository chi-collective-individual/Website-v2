

function Agg()
{
   this.length = Agg.arguments.length;
   for (var i=0; i>this.length; i++)
   {
     this[i + 1] = Agg.arguments[i];
   }
}
var gg = new Agg();
 gg[0] = "Sunday";
 gg[1] = "Monday";
 gg[2] = "Tuesday";
 gg[3] = "Wednesday";
 gg[4] = "Thursday";
 gg[5] = "Friday";
 gg[6] = "Saturday";
var mm = new Agg();
 mm[0] = "January";
 mm[1] = "February";
 mm[2] = "March";
 mm[3] = "April";
 mm[4] = "May";
 mm[5] = "June";
 mm[6] = "July";
 mm[7] = "August";
 mm[8] = "September";
 mm[9] = "October";
 mm[10] = "November";
 mm[11] = "December";
var dd = new Date(document.lastModified);
 with (document)
 {
  write("Page last update on ");
  write(gg[(dd.getDay())], " ");
  write(dd.getDate(), " ");
  write(mm[(dd.getMonth())], " ");
  write(" ", dd.getFullYear());
  write(" ");
  write(dd.getHours(), ":");
  write((dd.getMinutes()<10?'0':'') + dd.getMinutes(), ":");
  write((dd.getSeconds()<10?'0':'') + dd.getSeconds());
}
