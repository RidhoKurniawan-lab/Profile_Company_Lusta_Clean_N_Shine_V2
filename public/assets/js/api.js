export async function api(url, options = {}) {
  const headers = options.body instanceof FormData ? {} : { 'Content-Type': 'application/json' };

  const res = await fetch(url, {
    headers,
    credentials: 'same-origin',
    ...options
  });

  let data;
  try {
    data = await res.json();
  } catch {
    throw new Error('Response Not Json')
  }

  if (!res.ok) throw new Error(data.message || 'Api Error');

  return data;
}