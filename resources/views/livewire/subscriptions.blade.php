



<div>
      <table class="min-w-full table-auto">
        <thead class="justify-between">
          <tr class="bg-gray-800">
          <th class="px-16 py-2">
              <span class="text-gray-300"></span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Name Service</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Actions</span>
            </th>
            
            
          </tr>
        </thead>
        <tbody class="bg-gray-200">
        @foreach( $servicescontracts as $servicecontract)

          <tr class="bg-white border-4 border-gray-200">
            <td class="px-16 py-2 flex flex-row items-center">
             
            </td>
            <td>
              <span class="text-center ml-2 font-semibold">{{ $servicecontract->name }}</span>
            </td>
            <td class="px-16 py-2">
              <button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                Subscribe
              </button>
            </td>
            
          </tr>
          @endforeach

         
        </tbody>
      </table>
    </div>