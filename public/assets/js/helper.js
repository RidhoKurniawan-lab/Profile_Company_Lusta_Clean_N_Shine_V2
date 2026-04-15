export function formatRupiah(value, withSymbol = true) {
  if (value === null || value === undefined || value === '') return '';

  const number = Number(value);
  if (isNaN(number)) return '';

  return new Intl.NumberFormat('id-ID', {
    style: withSymbol ? 'currency' : 'decimal',
    currency: 'IDR',
    minimumFractionDigits: 0
  }).format(number);
}

export function formatPrice(num) {
  return Number(num).toLocaleString('id-ID');
}

export function formDataToObject(formData) {
  const obj = {};

  for (const [key, value] of formData.entries()) {
    const keys = key
      .replace(/\]/g, '')
      .split('['); 

    let current = obj;

    keys.forEach((k, i) => {
      if (i === keys.length - 1) {
        current[k] = value;
      } else {
        if (!current[k]) {
          current[k] = isNaN(keys[i + 1]) ? {} : [];
        }
        current = current[k];
      }
    });
  }

  return obj;
}

export function limitText(text, limit) {
  if (text.length <= limit) return text;
  return text.slice(0, limit) + '...';
}
