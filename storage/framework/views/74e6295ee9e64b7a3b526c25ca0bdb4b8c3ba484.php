<?php $__env->startSection('title', 'Profile'); ?>
<?php $__env->startSection('content'); ?>
    <!-- Start Header -->
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Header -->
    

    <h1><?php echo e(explode(' ', Auth::user()->name)[0]); ?> درجاتك يا</h1>
    <section>
        <!--for demo wrap-->
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>الشهر</th>
                        <th>العربي</th>
                        <th>رياضه</th>
                        <th>ميكانيكا</th>
                        <th>انجليزي</th>
                        <th>مبادئ الحاسب</th>
                        <th>كهرباء</th>
                        <th>عملي</th>
                        <th>سلوك</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td>يناير</td>
                        <td>25</td>
                        <td>21</td>
                        <td>28</td>
                        <td>15</td>
                        <td>18</td>
                        <td>16</td>
                        <td>10</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>فبراير</td>
                        <td>23</td>
                        <td>21</td>
                        <td>25</td>
                        <td>25</td>
                        <td>74</td>
                        <td>74</td>
                        <td>74</td>
                        <td>74</td>
                    </tr>
                    <tr>
                        <td>مارس</td>
                        <td>27</td>
                        <td>14</td>
                        <td>29</td>
                        <td>15</td>
                        <td>21</td>
                        <td>16</td>
                        <td>87</td>
                        <td>93</td>
                    </tr>
                    <tr>
                        <td>ابريل</td>
                        <td>12</td>
                        <td>29</td>
                        <td>25</td>
                        <td>23</td>
                        <td>17</td>
                        <td>21</td>
                        <td>86</td>
                        <td>74</td>
                    </tr>
                    <tr>
                        <td>مايو</td>
                        <td>23</td>
                        <td>21</td>
                        <td>18</td>
                        <td>15</td>
                        <td>9</td>
                        <td>14</td>
                        <td>18</td>
                        <td>92</td>
                    </tr>
                    <tr>
                        <td>يونيو</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/Profile/Profile.js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/youssef/Desktop/K-Link/resources/views/profile.blade.php ENDPATH**/ ?>