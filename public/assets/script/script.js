/*import swal from 'sweetalert';

const buttonDelete = document.querySelector('.btn');

swal({
    title: "Etes-vous sur de vouloir supprimer cette musique ?",
    text: "Cette action est irréversible",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("Votre musique a bien été supprimée", {
        icon: "success",
      });
    } else {
      swal("Ok votre musique ne sera pas supprimée");
    }
  });
*/
import 'index.html.twig';
alert('hello');
const buttonDelete = document.getElementById('buttonDelete');
swal({
    title: "Etes-vous sur de vouloir supprimer cette musique ?",
    text: "Cette action est irréversible",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("Votre musique a bien été supprimée", {
        icon: "success",
      });
    } else {
      swal("Ok votre musique ne sera pas supprimée");
    }
  });
