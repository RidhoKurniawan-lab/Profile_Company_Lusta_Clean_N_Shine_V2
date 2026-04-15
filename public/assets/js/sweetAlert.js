
export const alertSuccess = (
  title,
  text = '',
  {
    timer = null,
    showConfirmButton = true
  } = {}
) => {
  return Swal.fire({
    icon: 'success',
    title,
    text,
    confirmButtonColor: '#16a34a',
    showConfirmButton,
    timer,
    timerProgressBar: !!timer
  });
};

export const alertError = (
  title,
  text = '',
  {
    timer = null,
    showConfirmButton = true
  } = {}
) => {
  return Swal.fire({
    icon: 'warning',
    title,
    text,
    confirmButtonColor: '##dc2626',
    showConfirmButton,
    timer,
    timerProgressBar: !!timer
  });
}

export const alertConfirm = (title, text = '') => {
  return Swal.fire({
    icon: 'warning',
    title,
    text,
    showCancelButton: true,
    confirmButtonText: 'Ya',
    cancelButtonText: 'Batal',
    confirmButtonColor: '#2563eb',
    cancelButtonColor: '#6b7280'
  });
};