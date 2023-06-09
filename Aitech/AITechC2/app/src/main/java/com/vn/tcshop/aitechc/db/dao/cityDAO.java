package com.vn.tcshop.aitechc.db.dao;

import androidx.room.Dao;
import androidx.room.Delete;
import androidx.room.Insert;
import androidx.room.Query;
import androidx.room.Update;

import com.vn.tcshop.aitechc.db.entities.cityName;
import com.vn.tcshop.aitechc.db.entities.cityWeather;

import java.util.List;

@Dao
public interface cityDAO {

    @Query("SELECT * FROM cityName")
    List<cityName> getAll();

    @Query("Select * from cityName where city_name=:name")
    cityName getCity(String name);

    @Query("Select * from cityName where cityid=:id")
    cityName getCitybyID(int id);

    @Query("SELECT city_name from cityName")
    List<String> getCityNames();

    @Insert
    void insert(cityName city);

    @Delete
    void delete(cityName city);

    @Update
    void update(cityName city);


    @Query("SELECT * FROM city_weather")
    List<cityWeather> getAllRecord();

    @Query("SELECT * FROM city_weather where city_id=:id")
    List<cityWeather> getAllRecordC(int id);


    @Insert
    void insert(cityWeather weather);

    @Delete
    void delete(cityWeather weather);

    @Update
    void update(cityWeather weather);

}