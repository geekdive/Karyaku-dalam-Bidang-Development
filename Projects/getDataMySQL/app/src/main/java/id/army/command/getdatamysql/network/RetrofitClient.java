package id.army.command.getdatamysql.network;

import id.army.command.getdatamysql.model.Constant;
import id.army.command.getdatamysql.model.Function;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class RetrofitClient {
    private static Retrofit getRetrofit(){
        Retrofit retrofit = new Retrofit.Builder()
                .baseUrl(Constant.BASE_URL)
                .addConverterFactory(GsonConverterFactory.create())
                .build();
        return retrofit;
    }

    public static RestAPI getInstaceRetrofit(){
        return getRetrofit().create(RestAPI.class);
    }
}
