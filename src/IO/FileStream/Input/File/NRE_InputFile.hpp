
    /**
     * @file NRE_InputFile.hpp
     * @brief Declaration of Engine's IO's Object : InputFile
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

     #pragma once

    #include "../../NRE_FileStream.hpp"
    #include "../Stream/NRE_InputStream.hpp"

     /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace IO
         * @brief IO's API
         */
        namespace IO {

            /**
             * @class InputFile
             * @brief Manage input file stream
             */
            class InputFile : public FileStream, public InputStream {
                public:    // Methods
                    //## Constructor ##//
                        /**
                         * Default Constructor
                         */
                        InputFile() = delete;
                        /**
                         * Construct an input file stream with a given file's path
                         * @param p the file's stream path
                         */
                        InputFile(File const& p);

                    //## Move-Constructor ##//
                        /**
                         * Move i into this
                         * @param i the input file to move
                         */
                        InputFile(InputFile && i) = default;

                    //## Deconstructor ##//
                        /**
                         * InputFile Deconstructor
                         */
                        virtual ~InputFile() = default;

                    //## Getter ##//
                        /**
                         * @return the input file stream opening mode
                         */
                        virtual std::ios_base::openmode getMode() const override;
                        /**
                         * @return the input file's stream
                         */
                        virtual std::fstream& getStream() override;

                    //## Assignment Operator ##//
                        /**
                         * Move assignment of i into this
                         * @param i the input file to move
                         * @return  the reference of himself
                         */
                        InputFile& operator =(InputFile && i) = default;
            };
        }
    }

    #include "NRE_InputFile.tpp"
