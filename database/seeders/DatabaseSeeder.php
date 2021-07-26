<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('11111111'),
        ]);

        DB::table('theloai')->insert([
            'ten_theloai' => 'Truyện cổ tích',
        ]);
        DB::table('theloai')->insert([
            'ten_theloai' => 'Truyện truyền thuyết',
        ]);
        DB::table('theloai')->insert([
            'ten_theloai' => 'Truyện ma',
        ]);
        DB::table('theloai')->insert([
            'ten_theloai' => 'Truyện cười',
        ]);
        DB::table('theloai')->insert([
            'ten_theloai' => 'Truyện trữ tình',
        ]);
        DB::table('theloai')->insert([
            'ten_theloai' => 'Truyện võ lâm truyền kỳ',
        ]);

        DB::table('truyen')->insert([
            'ten_truyen' => 'Sơn Tinh Thủy Tinh',
            'mota_truyen' => 'Hùng Vương thứ mười tám muốn kén chồng cho con gái Mị Nương. Sơn Tinh (Thần Núi) và Thủy Tinh (Thần Nước) cùng đến cầu hôn. Nhà vua băn khoăn đưa ra yêu cầu sính lễ, ai đem sính lễ đến trước sẽ được lấy Mị Nương. Hôm sau Sơn Tinh đến trước, rước Mị Nương về. Thủy Tinh đến sau nổi giận, dâng nước đánh Sơn Tinh và thua trận. Từ đó hằng năm Thủy Tinh làm mưa bão trả thù Sơn Tinh.',
            'hinhanh_truyen' => 'hinhanh/huhuhuhuh.jpg',
            'trangthai_truyen' => 'Full',
            'tacgia_truyen' => 'Không xác định',
            'ngayphathanh_truyen' => '2021-12-12',
            'id_theloai' => '2',
        ]);
        DB::table('chuong')->insert([
            'ten_chuong' => 'Sơn Tinh Thủy Tinh',
            'ngaythem_chuong' => '2021-11-11',
            'noidung_chuong' => 'Vào đời Vua Hùng thứ 18, Vua có một người con gái đã đến tuổi cập kê, công chúa có dung nhan xinh đẹp tuyệt trần, lại còn có một làn da trắng trẻo mịn màng, dáng người nàng cũng cao ráo. Tên của nàng công chúa này là Mỵ Nương. Khi thấy con gái của mình đã tới tuổi để gả chồng nên Vua liền cho ban truyền tìm kiếm nhân kiệt ở khắp nhân gian hòng kén được một người phò mã đủ tài đủ đức.Nghe được tin Vua Hùng ban tin kén rể khắp nơi cho con gái, vua nước Tây Âu liền đem tới rất nhiều những vàng bạc cùng châu báu như là cau vàng, trầu bạc để mà dạm hỏi cưới nàng Mỵ Nương. Thấy vậy Vua Hùng lập tức cho triệu tất cả Lạc Hầu của mình vào cung để mà hội ý. Những Lạc Hầu này tâu rằng:– Vua nước Tây Âu ấy là một con người rất cường bạo, tuổi cũng khá cao rồi, mà hình dáng cũng rất kì quái, làm sao mà có thể xứng đôi với công chúa của chúng ta được.Nghe những lời khuyên can của đám Lạc Hầu nên Vua Hùng liền từ chối lời cầu hôn của vua nước Tây Âu kia. Cũng chính từ ngày đó mà mối quan hệ giữa nước Văn Lang cùng Tây Âu xấu đi, nảy sinh hiềm khích khó tháo gỡ.Bẵng đi một thời gian thì lại có hai chàng trai tới để dạm hỏi cưới nàng công chúa Mỵ Nương. Hai chàng trai này đều vô cùng xuất sắc và tuấn tú. Một người là Sơn Tinh (Chính là thần núi Tản Viên, hay còn gọi là Thánh Tản), người còn lại là Thủy Tinh (Chính là Thần Nước, hay Thần Biển Cả).Vua Hùng liền cho truyền cả hai chàng trai này vào triều để trổ tài, nếu như ai có tài hơn thì Vua sẽ chấp nhận gả con gái mình, tức công chúa Mỵ Nương cho người đó.Chàng Sơn Tinh trổ tài trước, chàng có phép chỉ tay tới đâu thì nơi đó lại mọc lên những rừng núi hùng vĩ, chim muông đông đúc từng đàn. Còn chàng Thủy Tinh lại có phép vẫy tay thì nước sẽ ào ào mà dâng lên thật cao, còn có cả thuồng luồng và ba ba hàng đàn kéo nhau nổi lên mặt nước nữa.Cả hai chàng trai đều vô cùng tài giỏi, có thể gọi là ngang tài cân sức nên Vua Hùng không biết phải chọn ai mới được. Vì vậy để quyết định thắng thua mà Vua đã phải ra thêm thử thách khác, người nào chiến thắng thì sẽ trở thành phò mã. Vua nói rằng:– Hai ngươi đều rất tài giỏi, ngang tài cân sức với nhau, vì vậy nên ta không thể chọn một trong hai được. Bây giờ sẽ như thế này, ngày mai nếu như một trong hai ngươi, người nào có thể đem được đồ sính lễ gồm có một trăm ván cơm nếp, một trăm tệp bánh trưng, voi chín ngà, gà chín cựa, ngựa chín hồng mao, mỗi thứ phải có một đôi tới đây sớm hơn thì người đó sẽ được cưới con gái của ta.Tuy nói rằng không thể chọn ai nhưng tất cả những đồ lễ mà Vua Hùng yêu cầu hai chàng chuẩn bị thì tất cả đều là những sản vật ở trên đất liền. Điều đó có thể cho thấy được Vua Hùng cũng đã ngầm đồng ý gả nàng Mỵ Nương cho Sơn Tinh rồi.Ngày hôm sau, khi bầu trời bên ngoài chỉ vừa hửng sáng thì Sơn Tinh đã đem được đầy đủ các loại lễ vật theo đúng yêu cầu của Vua Hùng đến cung vua để xin hỏi cưới nàng Mỵ Nương. Bởi vì những đồ lễ vật ấy với một thần núi như chàng thì vô cùng dễ để chuẩn bị.Vua Hùng vô cùng hài lòng với biểu hiện của Sơn Tinh nên đã bằng lòng cho phép Sơn Tinh được cưới con gái Mỵ Nương của mình.Còn Thủy Tinh bởi vì khó tìm kiếm những món lễ vật hỏi cưới đó nên đến trễ hơn một chút, chàng vô cùng hốt hoảng khi được tin nàng Mỵ Nương đã cùng đi với phu quân của mình là Sơn Tinh. Vì thế nên Thủy Tinh lập tức đuổi theo, đem cả đám binh tướng của mình tới đánh Sơn Tinh thề phải cướp lại nàng Mỵ Nương cho bằng được.Thủy Tinh cứ thế hô mưa rồi gọi gió làm rung chuyển trời đất, khiến cho nước biển cuồn cuộn dâng lên để đánh Sơn Tinh. Khi nước dâng cao khiến cho lúa ngập, đồng cũng ngập, sau đó thì nhà cửa cũng ngập nốt. Và giông tố cứ mỗi lúc lại càng dữ dội hơn, nước cũng càng ngày càng dâng cao hơn nữa, đám thủy quái thì cứ đông lên nhiều lần, chúng rầm rầm rộ rộ làm theo tất cả những mệnh lệnh của Thủy Tinh.Tất cả cư dân của nước Văn Lang lúc bấy giờ đều chung sức và chung lòng ra tay để giúp đỡ cho Sơn Tinh. Hơn nữa thần trống đồng thiêng liêng cũng hiện về để giục giã, cổ vũ cho mọi người ra trận mà tiêu diệt đám thủy quái hung bạo kia, đồng thời chống cả lũ lụt dữ dội. Những người nào khỏe mạnh thì đi đào đất để đắp thành đê. Chính vì thế mà ra đời những con đê dùng để chống lụt hiện nay của người Việt ta. Những đoạn đê dựng lên ngày càng cao hơn, chắc hơn, ngăn chia rồi chặn đứng được tất cả sự phá phách khủng khiếp của lũ lụt.Đối mặt với tình cảnh này, Sơn Tinh không hề có chút nao núng nào cả, chàng liền dùng phép của mình để bốc những quả đồi, rồi dời đi những dãy núi để mà tạo thành bức tường vững chắc ngăn chặn dòng nước lũ của đối thủ. Dòng nước lũ của Thủy Tinh dâng cao bao nhiêu thì những dãy núi của Sơn Tinh lại mọc cao lên bằng ấy. Đội quân của Sơn Tinh bê những hòn đá lớn, nhỏ ném tới tấp vào đám quân của Thủy Tinh ở dưới nước khiến chúng chết vô số kể. Xác cá, xác thuồng luồng, xác ba ba cứ nổi đầy kín cả mặt nước.Thủy Tinh cứ dâng nước lên một trào, Sơn Tinh lại nâng núi, nâng đất đá cao lên một vì. Khi Thủy Tinh lại dâng nước lên hai đợt thì Sơn Tinh lại tiếp tục mà dựng núi của mình lên hai vì. Vào đợt thứ ba thì Thủy Tinh liền xô nước tới, Sơn Tinh nhanh chóng nâng núi của mình lên đến ba vì. Cũng chính vì trận chiến này mà núi Tản Viên xưa còn được gọi với cái tên Ba Vì.Cả hai bên đã đánh nhau kéo dài tới mấy tháng ròng. Nhưng sau cùng bởi vì đuối sức nên Thủy Tinh phải cho quân rút trở về. Kể từ ngày đó thì chàng Sơn Tinh và nàng Mỵ Nương cũng được sống bên nhau vui vẻ, hạnh phúc.Tuy nhiên thì ân oán của Sơn Tinh cùng Thủy Tinh lại càng ngày càng nặng, hận thù cũng càng ngày càng sâu hơn. Mỗi năm vào tầm tháng 7 theo Âm lịch thì Thủy Tinh lại nghĩ tới ân oán khi xưa, lập tức đem dâng nước kéo tới đánh nhau cùng Sơn Tinh. Tuy vậy nhưng mỗi lần như vậy thì Thủy Tinh đều nhận lấy thất bại rồi phải kéo quân ra về.Truyền thuyết về Sơn Tinh – Thủy Tinh vô cùng nổi tiếng, và là một trong những cách lý giải của người Việt xưa về hiện tượng lũ lụt cùng những cách để chống lũ lụt của nước mình.',
            'id_truyen'=>'1'
        ]);
    }
}
        