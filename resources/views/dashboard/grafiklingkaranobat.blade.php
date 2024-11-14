<!DOCTYPE html>
<html>
<head>
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  <style>
    .donut {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background: conic-gradient(
        #3b82f6 0deg 72deg,    /* blue-500 */
        #f97316 72deg 144deg,  /* orange-500 */
        #22c55e 144deg 216deg, /* green-500 */
        #a855f7 216deg 288deg, /* purple-500 */
        #eab308 288deg 360deg  /* yellow-500 */
      );
      position: relative;
    }

    .donut-hole {
      position: absolute;
      width: 80px;
      height: 80px;
      background: white;
      border-radius: 50%;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .spangrafik{
        font-size: 10px;
    }
  </style>
</head>
<body>
    <div class="border bg-white shadow-md rounded-lg  px-5 py-4">
  <div class="px-2 py-5 ">
    <h2 class="text-lg font-semibold mb-6">Obat yang sering dibeli</h2>

    <div class="flex gap-5 flex-row items-center ">
      <!-- Donut Chart -->
      <div class="donut felx items-center">
        <div class="donut-hole"></div>
      </div>

      <!-- Legend -->
      <div class="w-40">
        <!-- ERP -->
        <div class="flex items-center mb-2">
          <div class="w-4 h-4 bg-blue-500 rounded mr-2"></div>
          <span class="text-gray-600 spangrafik">ERP</span>
          <span class="ml-auto spangrafik">85 pcs</span>
        </div>

        <!-- HRM -->
        <div class="flex items-center mb-2">
          <div class="w-4 h-4 bg-orange-500 rounded mr-2"></div>
          <span class="text-gray-600 spangrafik">HRM</span>
          <span class="ml-auto spangrafik">85 pcs</span>
        </div>

        <!-- DMS -->
        <div class="flex items-center mb-2">
          <div class="w-4 h-4 bg-green-500 rounded mr-2"></div>
          <span class="text-gray-600 spangrafik">DMS</span>
          <span class="ml-auto spangrafik">85 pcs</span>
        </div>

        <!-- CRM -->
        <div class="flex items-center mb-2">
          <div class="w-4 h-4 bg-purple-500 rounded mr-2"></div>
          <span class="text-gray-600 spangrafik">CRM</span>
          <span class="ml-auto spangrafik">85 pcs</span>
        </div>

        <!-- DAM -->
        <div class="flex items-center mb-2">
          <div class="w-4 h-4 bg-yellow-500 rounded mr-2"></div>
          <span class="text-gray-600 spangrafik">DAM</span>
          <span class="ml-auto spangrafik">85 pcs</span>
        </div>
      </div>
    </div>
  </div>
    </div>
</body>
</html>
