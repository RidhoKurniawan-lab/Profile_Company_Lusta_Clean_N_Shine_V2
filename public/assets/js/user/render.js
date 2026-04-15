import { formatRupiah, limitText } from "../helper.js";

const PUBLIC_URL = document.querySelector('[data-url-public]').dataset.urlPublic;

export function renderDetail(data) {
    if (!data) return;

    console.log(data);

    const name = data.name.split(" ");
    const first = name[0];
    const last = name[1];

    document.querySelector('[data-img-user]').src = `${data.image == 'default' ? `https://ui-avatars.com/api/?name=${first}+${last}&background=f59e0b&color=fff` : PUBLIC_URL + '/assets/uploads/products/' + data.image}`;

    document.querySelector('[data-img-user]').alt = `${data.image}`;

    document.querySelector('[data-stock-user]').textContent = ` In Stock: ${data.stock} units`;

    document.querySelector('[data-judul-user]').textContent = `${data.name}`;

    document.querySelector('[data-price-user]').textContent = `${formatRupiah(data.price)}`;

    document.querySelector('[data-des-user]').textContent = `${data.description}`;


    const body = document.querySelector('[data-link-user]');

    body.innerHTML = ''

    data.links.forEach(link => {
        if (link.url !== null && link.platform !== null) {
            let color = ''
            switch (link.platform) {
                case 'shopee': 
                    color = 'from-orange-500 to-orange-600'
                    break;
                case 'tokopedia': 
                    color = 'from-green-500 to-green-600'
                    break;
                case 'lazada': 
                    color = 'from-purple-500 to-purple-600'
                    break;
                case 'blibli': 
                    color = 'from-blue-500 to-blue-600'
                    break;
                case 'bukalapak': 
                    color = 'from-blue-500 to-blue-600'
                    break;
            
                default:
                    color = 'from-gray-100 to-gray-200'
                    break;
            }

            body.insertAdjacentHTML('afterbegin', `
                <a href="${link.url}" target="_blank" class="flex items-center justify-center gap-3 px-6 py-3 font-semibold text-white transition-all duration-300 bg-linear-to-r ${color} rounded-xl hover:shadow-lg">
                    <div class="text-left">
                        <p class="text-sm">Buy on</p>
                        <p class="text-lg">${link.platform}</p>
                    </div>
                    <i class="ml-auto fas fa-external-link-alt"></i>
                </a>`)

        }
    })

}


export function renderCardProduct(data) {
    if (!data) return;

    const wrapper = document.querySelector('[data-card-wrapper]');

    wrapper.innerHTML = '';

    data.forEach(item => {

        const name = item.name.split(" ");
        const first = name[0];
        const last = name[1];

        wrapper.insertAdjacentHTML('afterbegin', `
            <div data-aos="fade-up" class="group">
                  <div class="hover:-translate-y-0.5 overflow-hidden transition-shadow duration-300 bg-white border border-gray-100 shadow-md  rounded-2xl hover:shadow-xl">
                      <!-- Gambar Produk -->
                      <div class="relative overflow-hidden">
                          <img
                              src="${item.image == 'default' ? `https://ui-avatars.com/api/?name=${first}+${last}&background=f59e0b&color=fff` : PUBLIC_URL + '/assets/uploads/products/' + item.image}"
                              alt="${item.name}"
                              class="object-cover w-full h-48 transition-transform duration-300 group-hover:scale-105">
                      </div>

                      <!-- Card Body -->
                      <div class="p-4">
                          <h5 class="mb-1 font-semibold text-gray-900">
                              ${limitText(item.name, 20)}
                          </h5>

                          <!-- Rating Stars -->
                          <div class="flex items-center mb-4">
                              <i class="w-5 h-5 text-yellow-400 bi bi-star-fill"></i>
                              <i class="w-5 h-5 text-yellow-400 bi bi-star-fill"></i>
                              <i class="w-5 h-5 text-yellow-400 bi bi-star-fill"></i>
                              <i class="w-5 h-5 text-yellow-400 bi bi-star-fill"></i>
                              <i class="w-5 h-5 text-yellow-400 bi bi-star-fill"></i>
                          </div>
                          <!-- Detail Button -->
                          <a href="/product/detail?id=${item.id}" class="hover:-translate-y-0.5 block w-full py-3 font-semibold text-center text-white transition duration-300 bg-yellow-500 rounded-full hover:bg-yellow-600">
                              Details
                          </a>
                      </div>
                  </div>
              </div>`)
    });
}